<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateConstraint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $Id
 * @property string|null $Description
 * @property string|null $Parameters
 */
class UpdateConstraintRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     Id: string,
     *     Description?: string|null,
     *     Parameters?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
