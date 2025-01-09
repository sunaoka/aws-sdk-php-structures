<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeManagedJobTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $templateName
 * @property string $templateArn
 * @property string $description
 * @property string $templateVersion
 * @property list<string> $environments
 * @property list<Shapes\DocumentParameter> $documentParameters
 * @property string $document
 */
class DescribeManagedJobTemplateResponse extends Response
{
}
