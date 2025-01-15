<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GraphQLRenderConfig|null $graphQLConfig
 * @property DataStoreRenderConfig|null $dataStoreConfig
 * @property NoApiRenderConfig|null $noApiConfig
 */
class ApiConfiguration extends Shape
{
    /**
     * @param array{
     *     graphQLConfig?: GraphQLRenderConfig|null,
     *     dataStoreConfig?: DataStoreRenderConfig|null,
     *     noApiConfig?: NoApiRenderConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
