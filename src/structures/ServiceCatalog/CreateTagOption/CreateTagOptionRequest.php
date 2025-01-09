<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateTagOption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Key
 * @property string $Value
 */
class CreateTagOptionRequest extends Request
{
    /**
     * @param array{
     *     Key: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
