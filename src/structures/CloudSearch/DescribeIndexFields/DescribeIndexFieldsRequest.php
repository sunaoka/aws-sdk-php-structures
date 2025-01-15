<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeIndexFields;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<string>|null $FieldNames
 * @property bool|null $Deployed
 */
class DescribeIndexFieldsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     FieldNames?: list<string>|null,
     *     Deployed?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
