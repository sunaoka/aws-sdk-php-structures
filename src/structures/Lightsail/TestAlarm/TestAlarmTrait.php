<?php

namespace Sunaoka\Aws\Structures\Lightsail\TestAlarm;

trait TestAlarmTrait
{
    /**
     * @param TestAlarmRequest $args
     * @return TestAlarmResponse
     */
    public function testAlarm(TestAlarmRequest $args)
    {
        $result = parent::testAlarm($args->toArray());
        return new TestAlarmResponse($result->toArray());
    }
}
