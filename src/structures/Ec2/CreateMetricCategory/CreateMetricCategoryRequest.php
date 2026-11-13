<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateMetricCategory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Metrics
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class CreateMetricCategoryRequest extends Request
{
    /**
     * @param array{
     *     Metrics: list<string>,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
