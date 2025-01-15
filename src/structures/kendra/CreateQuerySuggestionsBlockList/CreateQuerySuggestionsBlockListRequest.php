<?php

namespace Sunaoka\Aws\Structures\kendra\CreateQuerySuggestionsBlockList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\S3Path $SourceS3Path
 * @property string|null $ClientToken
 * @property string $RoleArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateQuerySuggestionsBlockListRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Name: string,
     *     Description?: string|null,
     *     SourceS3Path: Shapes\S3Path,
     *     ClientToken?: string|null,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
