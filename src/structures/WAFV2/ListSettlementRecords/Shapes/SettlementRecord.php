<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListSettlementRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property string|null $PayerAddress
 * @property string|null $WalletAddress
 * @property 'SETTLED'|'PENDING'|'FAILED'|'SERVICE_ERROR'|'SKIPPED_ORIGIN_ERROR'|'DUPLICATE' $Status
 * @property string $Amount
 * @property 'USDC'|null $Currency
 * @property string|null $Network
 * @property string|null $TransactionId
 * @property string|null $RequestId
 * @property string|null $SourceName
 * @property string|null $Organization
 * @property string|null $SourceCategory
 * @property string|null $Intent
 * @property bool|null $Verified
 * @property string|null $ContentPath
 * @property string|null $WebAclArn
 * @property \Aws\Api\DateTimeResult|null $RequestTimestamp
 */
class SettlementRecord extends Shape
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     PayerAddress?: string|null,
     *     WalletAddress?: string|null,
     *     Status: 'SETTLED'|'PENDING'|'FAILED'|'SERVICE_ERROR'|'SKIPPED_ORIGIN_ERROR'|'DUPLICATE',
     *     Amount: string,
     *     Currency?: 'USDC'|null,
     *     Network?: string|null,
     *     TransactionId?: string|null,
     *     RequestId?: string|null,
     *     SourceName?: string|null,
     *     Organization?: string|null,
     *     SourceCategory?: string|null,
     *     Intent?: string|null,
     *     Verified?: bool|null,
     *     ContentPath?: string|null,
     *     WebAclArn?: string|null,
     *     RequestTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
