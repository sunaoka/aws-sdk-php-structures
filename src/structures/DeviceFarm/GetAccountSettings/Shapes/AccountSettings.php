<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountNumber
 * @property array<'ANDROID'|'IOS', int> $unmeteredDevices
 * @property array<'ANDROID'|'IOS', int> $unmeteredRemoteAccessDevices
 * @property int $maxJobTimeoutMinutes
 * @property TrialMinutes $trialMinutes
 * @property array<string, int> $maxSlots
 * @property int $defaultJobTimeoutMinutes
 * @property bool $skipAppResign
 */
class AccountSettings extends Shape
{
    /**
     * @param array{
     *     awsAccountNumber?: string,
     *     unmeteredDevices?: array<'ANDROID'|'IOS', int>,
     *     unmeteredRemoteAccessDevices?: array<'ANDROID'|'IOS', int>,
     *     maxJobTimeoutMinutes?: int,
     *     trialMinutes?: TrialMinutes,
     *     maxSlots?: array<string, int>,
     *     defaultJobTimeoutMinutes?: int,
     *     skipAppResign?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
