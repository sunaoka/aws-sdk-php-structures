<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int<1, max> $currentApplicationVersion
 * @property Shapes\Definition|null $definition
 * @property string|null $description
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     currentApplicationVersion: int<1, max>,
     *     definition?: Shapes\Definition|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
