<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDocumentationPart;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property Shapes\DocumentationPartLocation $location
 * @property string $properties
 */
class CreateDocumentationPartRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     location: Shapes\DocumentationPartLocation,
     *     properties: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
