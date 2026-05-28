<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceIdentifier
 * @property InputSource|null $inputSource
 * @property ResourceShape $resource
 */
class ServiceResource extends Shape
{
    /**
     * @param array{
     *     resourceIdentifier: string,
     *     inputSource?: InputSource|null,
     *     resource: ResourceShape
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
