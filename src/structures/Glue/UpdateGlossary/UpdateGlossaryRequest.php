<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateGlossary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $ClientToken
 */
class UpdateGlossaryRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
