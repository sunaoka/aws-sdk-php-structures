<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackRefactor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property bool|null $EnableStackCreation
 * @property list<Shapes\ResourceMapping>|null $ResourceMappings
 * @property list<Shapes\StackDefinition> $StackDefinitions
 */
class CreateStackRefactorRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     EnableStackCreation?: bool|null,
     *     ResourceMappings?: list<Shapes\ResourceMapping>|null,
     *     StackDefinitions: list<Shapes\StackDefinition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
