<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateContext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextName
 * @property Shapes\ContextSource $Source
 * @property string $ContextType
 * @property string $Description
 * @property array<string, string> $Properties
 * @property list<Shapes\Tag> $Tags
 */
class CreateContextRequest extends Request
{
    /**
     * @param array{
     *     ContextName: string,
     *     Source: Shapes\ContextSource,
     *     ContextType: string,
     *     Description?: string,
     *     Properties?: array<string, string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
