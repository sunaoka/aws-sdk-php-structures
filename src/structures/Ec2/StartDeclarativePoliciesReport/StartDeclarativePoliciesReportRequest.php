<?php

namespace Sunaoka\Aws\Structures\Ec2\StartDeclarativePoliciesReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $S3Bucket
 * @property string $S3Prefix
 * @property string $TargetId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class StartDeclarativePoliciesReportRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     S3Bucket: string,
     *     S3Prefix?: string,
     *     TargetId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
