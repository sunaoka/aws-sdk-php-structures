<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateTagOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Value
 * @property bool|null $Active
 */
class UpdateTagOptionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Value?: string|null,
     *     Active?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
