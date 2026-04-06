<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\DeleteKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreateTimestamp
 * @property \Aws\Api\DateTimeResult|null $DeletePendingTimestamp
 * @property \Aws\Api\DateTimeResult|null $DeleteTimestamp
 * @property bool $Enabled
 * @property bool $Exportable
 * @property string $KeyArn
 * @property KeyAttributes $KeyAttributes
 * @property string $KeyCheckValue
 * @property 'CMAC'|'ANSI_X9_24' $KeyCheckValueAlgorithm
 * @property 'EXTERNAL'|'AWS_PAYMENT_CRYPTOGRAPHY' $KeyOrigin
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE' $KeyState
 * @property \Aws\Api\DateTimeResult|null $UsageStartTimestamp
 * @property \Aws\Api\DateTimeResult|null $UsageStopTimestamp
 */
class Key extends Shape
{
    /**
     * @param array{
     *     CreateTimestamp: \Aws\Api\DateTimeResult,
     *     DeletePendingTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DeleteTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Enabled: bool,
     *     Exportable: bool,
     *     KeyArn: string,
     *     KeyAttributes: KeyAttributes,
     *     KeyCheckValue: string,
     *     KeyCheckValueAlgorithm: 'CMAC'|'ANSI_X9_24',
     *     KeyOrigin: 'EXTERNAL'|'AWS_PAYMENT_CRYPTOGRAPHY',
     *     KeyState: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE',
     *     UsageStartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UsageStopTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
