<?php

namespace Sunaoka\Aws\Structures\Uxc\GetAccountCustomizations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'none'|'pink'|'purple'|'darkBlue'|'lightBlue'|'teal'|'green'|'yellow'|'orange'|'red'|null $accountColor
 * @property list<string>|null $visibleServices
 * @property list<string>|null $visibleRegions
 */
class GetAccountCustomizationsResponse extends Response
{
}
