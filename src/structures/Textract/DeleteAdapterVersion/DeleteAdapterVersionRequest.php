<?php

namespace Sunaoka\Aws\Structures\Textract\DeleteAdapterVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdapterId
 * @property string $AdapterVersion
 */
class DeleteAdapterVersionRequest extends Request
{
    /**
     * @param array{
     *     AdapterId: string,
     *     AdapterVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
