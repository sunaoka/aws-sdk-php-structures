<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecrets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'description'|'name'|'tag-key'|'tag-value'|'primary-region'|'owning-service'|'all'|null $Key
 * @property list<string>|null $Values
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Key?: 'description'|'name'|'tag-key'|'tag-value'|'primary-region'|'owning-service'|'all'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
