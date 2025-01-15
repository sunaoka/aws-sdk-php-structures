<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Comment
 * @property string $DataSetId
 * @property array<string, string>|null $Tags
 */
class CreateRevisionRequest extends Request
{
    /**
     * @param array{
     *     Comment?: string|null,
     *     DataSetId: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
