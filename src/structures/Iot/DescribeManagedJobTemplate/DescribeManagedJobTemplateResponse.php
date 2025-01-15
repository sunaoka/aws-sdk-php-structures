<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeManagedJobTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $templateName
 * @property string|null $templateArn
 * @property string|null $description
 * @property string|null $templateVersion
 * @property list<string>|null $environments
 * @property list<Shapes\DocumentParameter>|null $documentParameters
 * @property string|null $document
 */
class DescribeManagedJobTemplateResponse extends Response
{
}
