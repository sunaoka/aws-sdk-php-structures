<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $launchTemplateId
 * @property string $accountId
 * @property bool $setDefaultVersion
 */
class LaunchTemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     launchTemplateId: string,
     *     accountId?: string,
     *     setDefaultVersion?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
