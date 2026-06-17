<?php

namespace Sunaoka\Aws\Structures\Glue\CreateGlossaryTerm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlossaryIdentifier
 * @property string $Name
 * @property string|null $ShortDescription
 * @property string|null $LongDescription
 * @property string|null $ClientToken
 */
class CreateGlossaryTermRequest extends Request
{
    /**
     * @param array{
     *     GlossaryIdentifier: string,
     *     Name: string,
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
