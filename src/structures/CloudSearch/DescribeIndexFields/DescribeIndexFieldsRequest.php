<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeIndexFields;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<string> $FieldNames
 * @property bool $Deployed
 */
class DescribeIndexFieldsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     FieldNames?: list<string>,
     *     Deployed?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
