<?php

namespace Sunaoka\Aws\Structures\kendra\CreateThesaurus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Name
 * @property string|null $Description
 * @property string $RoleArn
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\S3Path $SourceS3Path
 * @property string|null $ClientToken
 */
class CreateThesaurusRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Name: string,
     *     Description?: string|null,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     SourceS3Path: Shapes\S3Path,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
