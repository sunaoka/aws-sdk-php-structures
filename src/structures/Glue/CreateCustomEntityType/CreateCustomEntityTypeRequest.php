<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCustomEntityType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $RegexString
 * @property list<string>|null $ContextWords
 * @property array<string, string>|null $Tags
 */
class CreateCustomEntityTypeRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     RegexString: string,
     *     ContextWords?: list<string>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
