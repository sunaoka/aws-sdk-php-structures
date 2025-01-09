<?php

namespace Sunaoka\Aws\Structures\MediaStore\PutCorsPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 * @property list<Shapes\CorsRule> $CorsPolicy
 */
class PutCorsPolicyRequest extends Request
{
    /**
     * @param array{
     *     ContainerName: string,
     *     CorsPolicy: list<Shapes\CorsRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
