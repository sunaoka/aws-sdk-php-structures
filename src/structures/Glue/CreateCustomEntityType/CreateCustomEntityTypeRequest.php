<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCustomEntityType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $RegexString
 * @property list<string> $ContextWords
 * @property array<string, string> $Tags
 */
class CreateCustomEntityTypeRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RegexString: string,
     *     ContextWords?: list<string>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
