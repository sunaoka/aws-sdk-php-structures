<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransactionId
 * @property string $NextPageToken
 */
class FetchPageRequest extends Shape
{
    /**
     * @param array{
     *     TransactionId: string,
     *     NextPageToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
