<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $clientCompatibilityVersion
 * @property list<string> $supportedModelIds
 * @property string|null $message
 */
class CompatibilityInformation extends Shape
{
    /**
     * @param array{
     *     clientCompatibilityVersion: int,
     *     supportedModelIds: list<string>,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
