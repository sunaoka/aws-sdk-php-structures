<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int<1, max> $currentApplicationVersion
 * @property Shapes\Definition $definition
 * @property string $description
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     currentApplicationVersion: int<1, max>,
     *     definition?: Shapes\Definition,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
