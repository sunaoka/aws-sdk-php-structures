<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $serviceId
 * @property Shapes\AdditionalServiceRegistrationStep|null $additionalStep
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $tags
 */
class RegisterServiceResponse extends Response
{
}
