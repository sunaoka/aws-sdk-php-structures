<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\MergeProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $MainProfileId
 * @property list<string> $ProfileIdsToBeMerged
 * @property Shapes\FieldSourceProfileIds $FieldSourceProfileIds
 */
class MergeProfilesRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     MainProfileId: string,
     *     ProfileIdsToBeMerged: list<string>,
     *     FieldSourceProfileIds?: Shapes\FieldSourceProfileIds
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
