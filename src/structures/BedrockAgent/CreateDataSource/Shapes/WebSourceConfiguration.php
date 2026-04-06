<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UrlConfiguration $urlConfiguration
 */
class WebSourceConfiguration extends Shape
{
    /**
     * @param array{urlConfiguration: UrlConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
