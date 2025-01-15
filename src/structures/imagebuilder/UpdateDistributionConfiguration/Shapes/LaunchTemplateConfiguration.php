<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $launchTemplateId
 * @property string|null $accountId
 * @property bool|null $setDefaultVersion
 */
class LaunchTemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     launchTemplateId: string,
     *     accountId?: string|null,
     *     setDefaultVersion?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
