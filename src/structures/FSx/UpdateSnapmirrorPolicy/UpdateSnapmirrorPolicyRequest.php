<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapmirrorPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $SnapmirrorPolicyId
 * @property list<Shapes\SnapmirrorPolicyRetentionRule>|null $RetentionRules
 * @property string|null $TransferSchedule
 * @property bool|null $NetworkCompressionEnabled
 * @property int<0, max>|null $ThrottleInKbps
 */
class UpdateSnapmirrorPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     SnapmirrorPolicyId: string,
     *     RetentionRules?: list<Shapes\SnapmirrorPolicyRetentionRule>|null,
     *     TransferSchedule?: string|null,
     *     NetworkCompressionEnabled?: bool|null,
     *     ThrottleInKbps?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
