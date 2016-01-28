<?php

namespace M6Web\Bundle\StatsdBundle\Statsd;

interface MonitorableEventInterface
{
    /**
     * the measured value
     * @return mixed
     */
    public function getValue();

    /**
     * array of tags [key => value]
     * @return array
     */
    public function getTags();
}
