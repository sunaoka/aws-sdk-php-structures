<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int $currentApplicationVersion
 * @property Shapes\Definition $definition
 * @property string $description
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     currentApplicationVersion: int,
     *     definition?: Shapes\Definition,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
