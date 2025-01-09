<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $typesFilePath
 * @property string $queriesFilePath
 * @property string $mutationsFilePath
 * @property string $subscriptionsFilePath
 * @property string $fragmentsFilePath
 */
class GraphQLRenderConfig extends Shape
{
    /**
     * @param array{
     *     typesFilePath: string,
     *     queriesFilePath: string,
     *     mutationsFilePath: string,
     *     subscriptionsFilePath: string,
     *     fragmentsFilePath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
