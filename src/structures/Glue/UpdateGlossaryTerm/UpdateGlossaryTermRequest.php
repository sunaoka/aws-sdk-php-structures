<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateGlossaryTerm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string|null $Name
 * @property string|null $ShortDescription
 * @property string|null $LongDescription
 * @property string|null $ClientToken
 */
class UpdateGlossaryTermRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Name?: string|null,
     *     ShortDescription?: string|null,
     *     LongDescription?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
