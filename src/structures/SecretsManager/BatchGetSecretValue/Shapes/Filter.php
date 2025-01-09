<?php

namespace Sunaoka\Aws\Structures\SecretsManager\BatchGetSecretValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'description'|'name'|'tag-key'|'tag-value'|'primary-region'|'owning-service'|'all' $Key
 * @property list<string> $Values
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Key?: 'description'|'name'|'tag-key'|'tag-value'|'primary-region'|'owning-service'|'all',
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
