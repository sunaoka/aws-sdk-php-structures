<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Comment
 * @property string $DataSetId
 * @property array<string, string> $Tags
 */
class CreateRevisionRequest extends Request
{
    /**
     * @param array{
     *     Comment?: string,
     *     DataSetId: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
