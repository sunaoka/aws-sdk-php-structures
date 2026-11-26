<?php

namespace Sunaoka\Aws\Structures\ELBProxy\CreateProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigurationFile|null $configurationFile
 * @property ConfigurationArchive|null $configurationArchive
 */
class ProxyConfiguration extends Shape
{
    /**
     * @param array{
     *     configurationFile?: ConfigurationFile|null,
     *     configurationArchive?: ConfigurationArchive|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
