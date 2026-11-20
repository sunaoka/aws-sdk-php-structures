<?php

namespace Sunaoka\Aws\Structures\Iam\CreateOpenIDConnectProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContextProviderKeyDefinition>|null $KeyDefinitionList
 * @property string $SubjectSourceKey
 * @property string|null $SubjectTypeValue
 * @property string|null $SubjectTypeSourceKey
 */
class ContextProvider extends Shape
{
    /**
     * @param array{
     *     KeyDefinitionList?: list<ContextProviderKeyDefinition>|null,
     *     SubjectSourceKey: string,
     *     SubjectTypeValue?: string|null,
     *     SubjectTypeSourceKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
