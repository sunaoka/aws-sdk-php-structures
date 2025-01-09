<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GraphQLRenderConfig $graphQLConfig
 * @property DataStoreRenderConfig $dataStoreConfig
 * @property NoApiRenderConfig $noApiConfig
 */
class ApiConfiguration extends Shape
{
    /**
     * @param array{
     *     graphQLConfig?: GraphQLRenderConfig,
     *     dataStoreConfig?: DataStoreRenderConfig,
     *     noApiConfig?: NoApiRenderConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
