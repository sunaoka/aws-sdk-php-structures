<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\StartKeyUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyArn
 * @property KeyAttributes $KeyAttributes
 * @property string $KeyCheckValue
 * @property 'CMAC'|'ANSI_X9_24' $KeyCheckValueAlgorithm
 * @property bool $Enabled
 * @property bool $Exportable
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE' $KeyState
 * @property 'EXTERNAL'|'AWS_PAYMENT_CRYPTOGRAPHY' $KeyOrigin
 * @property \Aws\Api\DateTimeResult $CreateTimestamp
 * @property \Aws\Api\DateTimeResult|null $UsageStartTimestamp
 * @property \Aws\Api\DateTimeResult|null $UsageStopTimestamp
 * @property \Aws\Api\DateTimeResult|null $DeletePendingTimestamp
 * @property \Aws\Api\DateTimeResult|null $DeleteTimestamp
 */
class Key extends Shape
{
    /**
     * @param array{
     *     KeyArn: string,
     *     KeyAttributes: KeyAttributes,
     *     KeyCheckValue: string,
     *     KeyCheckValueAlgorithm: 'CMAC'|'ANSI_X9_24',
     *     Enabled: bool,
     *     Exportable: bool,
     *     KeyState: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE',
     *     KeyOrigin: 'EXTERNAL'|'AWS_PAYMENT_CRYPTOGRAPHY',
     *     CreateTimestamp: \Aws\Api\DateTimeResult,
     *     UsageStartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UsageStopTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DeletePendingTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DeleteTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
