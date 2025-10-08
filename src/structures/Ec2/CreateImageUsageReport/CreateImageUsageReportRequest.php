<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateImageUsageReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property bool|null $DryRun
 * @property list<Shapes\ImageUsageResourceTypeRequest> $ResourceTypes
 * @property list<string>|null $AccountIds
 * @property string|null $ClientToken
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateImageUsageReportRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     DryRun?: bool|null,
     *     ResourceTypes: list<Shapes\ImageUsageResourceTypeRequest>,
     *     AccountIds?: list<string>|null,
     *     ClientToken?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
