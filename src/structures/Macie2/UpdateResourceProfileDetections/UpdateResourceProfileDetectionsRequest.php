<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateResourceProfileDetections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property list<Shapes\SuppressDataIdentifier> $suppressDataIdentifiers
 */
class UpdateResourceProfileDetectionsRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     suppressDataIdentifiers?: list<Shapes\SuppressDataIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
