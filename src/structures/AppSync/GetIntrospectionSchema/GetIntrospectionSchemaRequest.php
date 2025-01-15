<?php

namespace Sunaoka\Aws\Structures\AppSync\GetIntrospectionSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property 'SDL'|'JSON' $format
 * @property bool|null $includeDirectives
 */
class GetIntrospectionSchemaRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     format: 'SDL'|'JSON',
     *     includeDirectives?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
