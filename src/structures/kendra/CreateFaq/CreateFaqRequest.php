<?php

namespace Sunaoka\Aws\Structures\kendra\CreateFaq;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\S3Path $S3Path
 * @property string $RoleArn
 * @property list<Shapes\Tag>|null $Tags
 * @property 'CSV'|'CSV_WITH_HEADER'|'JSON'|null $FileFormat
 * @property string|null $ClientToken
 * @property string|null $LanguageCode
 */
class CreateFaqRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Name: string,
     *     Description?: string|null,
     *     S3Path: Shapes\S3Path,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     FileFormat?: 'CSV'|'CSV_WITH_HEADER'|'JSON'|null,
     *     ClientToken?: string|null,
     *     LanguageCode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
