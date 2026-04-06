<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DetectProfileObjectType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Objects
 * @property string $DomainName
 */
class DetectProfileObjectTypeRequest extends Request
{
    /**
     * @param array{
     *     Objects: list<string>,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
