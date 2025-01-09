<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateAppBlockBuilderStreamingURL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppBlockBuilderName
 * @property int $Validity
 */
class CreateAppBlockBuilderStreamingURLRequest extends Request
{
    /**
     * @param array{
     *     AppBlockBuilderName: string,
     *     Validity?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
