<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateContext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextName
 * @property Shapes\ContextSource $Source
 * @property string $ContextType
 * @property string|null $Description
 * @property array<string, string>|null $Properties
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateContextRequest extends Request
{
    /**
     * @param array{
     *     ContextName: string,
     *     Source: Shapes\ContextSource,
     *     ContextType: string,
     *     Description?: string|null,
     *     Properties?: array<string, string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
