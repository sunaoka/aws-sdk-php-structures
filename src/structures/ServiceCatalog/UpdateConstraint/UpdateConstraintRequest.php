<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateConstraint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $Id
 * @property string $Description
 * @property string $Parameters
 */
class UpdateConstraintRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     Id: string,
     *     Description?: string,
     *     Parameters?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
