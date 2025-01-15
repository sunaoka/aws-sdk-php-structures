<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetObjectInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property 'SERIALIZABLE'|'EVENTUAL'|null $ConsistencyLevel
 */
class GetObjectInformationRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
