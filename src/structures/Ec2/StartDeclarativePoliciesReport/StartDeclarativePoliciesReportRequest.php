<?php

namespace Sunaoka\Aws\Structures\Ec2\StartDeclarativePoliciesReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $S3Bucket
 * @property string|null $S3Prefix
 * @property string $TargetId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class StartDeclarativePoliciesReportRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     S3Bucket: string,
     *     S3Prefix?: string|null,
     *     TargetId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
