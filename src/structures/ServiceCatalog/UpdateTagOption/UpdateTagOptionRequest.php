<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateTagOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Value
 * @property bool $Active
 */
class UpdateTagOptionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Value?: string,
     *     Active?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
