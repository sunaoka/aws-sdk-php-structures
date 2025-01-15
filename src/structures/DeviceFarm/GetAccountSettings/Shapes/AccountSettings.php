<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsAccountNumber
 * @property array<'ANDROID'|'IOS', int>|null $unmeteredDevices
 * @property array<'ANDROID'|'IOS', int>|null $unmeteredRemoteAccessDevices
 * @property int|null $maxJobTimeoutMinutes
 * @property TrialMinutes|null $trialMinutes
 * @property array<string, int>|null $maxSlots
 * @property int|null $defaultJobTimeoutMinutes
 * @property bool|null $skipAppResign
 */
class AccountSettings extends Shape
{
    /**
     * @param array{
     *     awsAccountNumber?: string|null,
     *     unmeteredDevices?: array<'ANDROID'|'IOS', int>|null,
     *     unmeteredRemoteAccessDevices?: array<'ANDROID'|'IOS', int>|null,
     *     maxJobTimeoutMinutes?: int|null,
     *     trialMinutes?: TrialMinutes|null,
     *     maxSlots?: array<string, int>|null,
     *     defaultJobTimeoutMinutes?: int|null,
     *     skipAppResign?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
