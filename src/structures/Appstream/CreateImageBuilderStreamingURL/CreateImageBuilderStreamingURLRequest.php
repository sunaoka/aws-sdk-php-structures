<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImageBuilderStreamingURL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int|null $Validity
 */
class CreateImageBuilderStreamingURLRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Validity?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
